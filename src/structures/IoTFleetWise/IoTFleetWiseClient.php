<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise;

class IoTFleetWiseClient extends \Aws\IoTFleetWise\IoTFleetWiseClient
{
    use AssociateVehicleFleet\AssociateVehicleFleetTrait;
    use BatchCreateVehicle\BatchCreateVehicleTrait;
    use BatchUpdateVehicle\BatchUpdateVehicleTrait;
    use CreateCampaign\CreateCampaignTrait;
    use CreateDecoderManifest\CreateDecoderManifestTrait;
    use CreateFleet\CreateFleetTrait;
    use CreateModelManifest\CreateModelManifestTrait;
    use CreateSignalCatalog\CreateSignalCatalogTrait;
    use CreateStateTemplate\CreateStateTemplateTrait;
    use CreateVehicle\CreateVehicleTrait;
    use DeleteCampaign\DeleteCampaignTrait;
    use DeleteDecoderManifest\DeleteDecoderManifestTrait;
    use DeleteFleet\DeleteFleetTrait;
    use DeleteModelManifest\DeleteModelManifestTrait;
    use DeleteSignalCatalog\DeleteSignalCatalogTrait;
    use DeleteStateTemplate\DeleteStateTemplateTrait;
    use DeleteVehicle\DeleteVehicleTrait;
    use DisassociateVehicleFleet\DisassociateVehicleFleetTrait;
    use GetCampaign\GetCampaignTrait;
    use GetDecoderManifest\GetDecoderManifestTrait;
    use GetEncryptionConfiguration\GetEncryptionConfigurationTrait;
    use GetFleet\GetFleetTrait;
    use GetLoggingOptions\GetLoggingOptionsTrait;
    use GetModelManifest\GetModelManifestTrait;
    use GetRegisterAccountStatus\GetRegisterAccountStatusTrait;
    use GetSignalCatalog\GetSignalCatalogTrait;
    use GetStateTemplate\GetStateTemplateTrait;
    use GetVehicle\GetVehicleTrait;
    use GetVehicleStatus\GetVehicleStatusTrait;
    use ImportDecoderManifest\ImportDecoderManifestTrait;
    use ImportSignalCatalog\ImportSignalCatalogTrait;
    use ListCampaigns\ListCampaignsTrait;
    use ListDecoderManifestNetworkInterfaces\ListDecoderManifestNetworkInterfacesTrait;
    use ListDecoderManifestSignals\ListDecoderManifestSignalsTrait;
    use ListDecoderManifests\ListDecoderManifestsTrait;
    use ListFleets\ListFleetsTrait;
    use ListFleetsForVehicle\ListFleetsForVehicleTrait;
    use ListModelManifestNodes\ListModelManifestNodesTrait;
    use ListModelManifests\ListModelManifestsTrait;
    use ListSignalCatalogNodes\ListSignalCatalogNodesTrait;
    use ListSignalCatalogs\ListSignalCatalogsTrait;
    use ListStateTemplates\ListStateTemplatesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListVehicles\ListVehiclesTrait;
    use ListVehiclesInFleet\ListVehiclesInFleetTrait;
    use PutEncryptionConfiguration\PutEncryptionConfigurationTrait;
    use PutLoggingOptions\PutLoggingOptionsTrait;
    use RegisterAccount\RegisterAccountTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateCampaign\UpdateCampaignTrait;
    use UpdateDecoderManifest\UpdateDecoderManifestTrait;
    use UpdateFleet\UpdateFleetTrait;
    use UpdateModelManifest\UpdateModelManifestTrait;
    use UpdateSignalCatalog\UpdateSignalCatalogTrait;
    use UpdateStateTemplate\UpdateStateTemplateTrait;
    use UpdateVehicle\UpdateVehicleTrait;
}
