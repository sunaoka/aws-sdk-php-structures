<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService;

class LexModelBuildingServiceClient extends \Aws\LexModelBuildingService\LexModelBuildingServiceClient
{
    use CreateBotVersion\CreateBotVersionTrait;
    use CreateIntentVersion\CreateIntentVersionTrait;
    use CreateSlotTypeVersion\CreateSlotTypeVersionTrait;
    use DeleteBot\DeleteBotTrait;
    use DeleteBotAlias\DeleteBotAliasTrait;
    use DeleteBotChannelAssociation\DeleteBotChannelAssociationTrait;
    use DeleteBotVersion\DeleteBotVersionTrait;
    use DeleteIntent\DeleteIntentTrait;
    use DeleteIntentVersion\DeleteIntentVersionTrait;
    use DeleteSlotType\DeleteSlotTypeTrait;
    use DeleteSlotTypeVersion\DeleteSlotTypeVersionTrait;
    use DeleteUtterances\DeleteUtterancesTrait;
    use GetBot\GetBotTrait;
    use GetBotAlias\GetBotAliasTrait;
    use GetBotAliases\GetBotAliasesTrait;
    use GetBotChannelAssociation\GetBotChannelAssociationTrait;
    use GetBotChannelAssociations\GetBotChannelAssociationsTrait;
    use GetBotVersions\GetBotVersionsTrait;
    use GetBots\GetBotsTrait;
    use GetBuiltinIntent\GetBuiltinIntentTrait;
    use GetBuiltinIntents\GetBuiltinIntentsTrait;
    use GetBuiltinSlotTypes\GetBuiltinSlotTypesTrait;
    use GetExport\GetExportTrait;
    use GetImport\GetImportTrait;
    use GetIntent\GetIntentTrait;
    use GetIntentVersions\GetIntentVersionsTrait;
    use GetIntents\GetIntentsTrait;
    use GetMigration\GetMigrationTrait;
    use GetMigrations\GetMigrationsTrait;
    use GetSlotType\GetSlotTypeTrait;
    use GetSlotTypeVersions\GetSlotTypeVersionsTrait;
    use GetSlotTypes\GetSlotTypesTrait;
    use GetUtterancesView\GetUtterancesViewTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutBot\PutBotTrait;
    use PutBotAlias\PutBotAliasTrait;
    use PutIntent\PutIntentTrait;
    use PutSlotType\PutSlotTypeTrait;
    use StartImport\StartImportTrait;
    use StartMigration\StartMigrationTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
}
