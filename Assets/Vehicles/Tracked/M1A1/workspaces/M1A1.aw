BaseSource {
 AnimSetTemplate "{968D52F76BB570C9}Assets/Vehicles/Wheeled/LAV25/workspaces/LAV25.ast"
 AnimSetInstances {
  "{7F0306C8DC7B6893}Assets/Vehicles/Wheeled/LAV25/workspaces/LAV25_vehicle.asi"
  "{4D3CA2D353C4FB44}Assets/Vehicles/Wheeled/LAV25/workspaces/LAV25_player.asi"
  "{AC6294F122B2FCE0}Assets/Vehicles/Tracked/M1A1/workspaces/M1A1_vehicle.asi"
  "{C58B5F68205B857D}Assets/Vehicles/Tracked/M1A1/workspaces/M1A1_player.asi"
 }
 AnimGraph "{7209B480AE95B73B}Assets/Vehicles/Tracked/M1A1/workspaces/M1A1.agr"
 PreviewModels {
  AnimSrcWorkspacePreviewModel "{6056956E70B64B68}" {
   Model "{790CB9C809DE64B8}Assets/Characters/Animation/AnimTestChar_US_01.xob"
  }
  AnimSrcWorkspacePreviewModel "{6070A32FC79263AD}" {
   Model "{D068C619231F3342}Assets/Vehicles/Wheeled/LAV25/LAV25_base.xob"
  }
  AnimSrcWorkspacePreviewModel "{6072D6A53595D893}" {
   Model "{32F27DBE1E6763C3}Assets/Vehicles/Wheeled/LAV25/LAV25_turret.xob"
  }
  AnimSrcWorkspacePreviewModel "{64E361AFF14844F6}" {
   Model "{3E5C55F26AC62973}Assets/Vehicles/Tracked/M1A1/m1a1_abrams.xob"
  }
  AnimSrcWorkspacePreviewModel "{64EAED9C42CBBB01}" {
   Model "{6F4D5BB61951F295}Assets/Vehicles/Tracked/M1A1/m1a1_abrams_commander_turret.xob"
  }
  AnimSrcWorkspacePreviewModel "{64EAED9C7AEC1B78}" {
   Model "{C92A2EBD50904EF0}Assets/Vehicles/Tracked/M1A1/m1a1_abrams_turret.xob"
  }
 }
 ChildPreviewModels {
  AnimSrcWorkspaceChildPreviewModel "{614ED56C15A48FA8}" {
   Enabled 1
   Model "{32F27DBE1E6763C3}Assets/Vehicles/Wheeled/LAV25/LAV25_turret.xob"
   Bone "v_turret_slot"
   Parent "{6070A32FC79263AD}"
  }
  AnimSrcWorkspaceChildPreviewModel "{64EAED9D2A6D69FE}" {
   Enabled 1
   Model "{C92A2EBD50904EF0}Assets/Vehicles/Tracked/M1A1/m1a1_abrams_turret.xob"
   Bone "Scene_Root"
   Parent "{64E361AFF14844F6}"
  }
 }
 AudioTesting AnimSrcWorkspaceAudioTesting "{6056956E70B8563B}" {
 }
 AttachmentTesting AnimSrcWorkspaceAttachmentTesting "{6056956E70B85601}" {
 }
 IkTesting AnimSrcWorkspaceIkTesting "{6056956E70B85630}" {
 }
}