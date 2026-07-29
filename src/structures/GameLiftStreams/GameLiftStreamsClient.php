<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams;

class GameLiftStreamsClient extends \Aws\GameLiftStreams\GameLiftStreamsClient
{
    use AddStreamGroupLocations\AddStreamGroupLocationsTrait;
    use AssociateApplications\AssociateApplicationsTrait;
    use CreateApplication\CreateApplicationTrait;
    use CreateStreamGroup\CreateStreamGroupTrait;
    use CreateStreamSessionAdminShell\CreateStreamSessionAdminShellTrait;
    use CreateStreamSessionConnection\CreateStreamSessionConnectionTrait;
    use CreateStreamUrl\CreateStreamUrlTrait;
    use DeleteApplication\DeleteApplicationTrait;
    use DeleteStreamGroup\DeleteStreamGroupTrait;
    use DisassociateApplications\DisassociateApplicationsTrait;
    use ExportStreamSessionFiles\ExportStreamSessionFilesTrait;
    use GetApplication\GetApplicationTrait;
    use GetStreamGroup\GetStreamGroupTrait;
    use GetStreamSession\GetStreamSessionTrait;
    use GetStreamUrl\GetStreamUrlTrait;
    use ListApplicationShaderCaches\ListApplicationShaderCachesTrait;
    use ListApplications\ListApplicationsTrait;
    use ListStreamGroups\ListStreamGroupsTrait;
    use ListStreamSessions\ListStreamSessionsTrait;
    use ListStreamSessionsByAccount\ListStreamSessionsByAccountTrait;
    use ListStreamUrls\ListStreamUrlsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use RemoveStreamGroupLocations\RemoveStreamGroupLocationsTrait;
    use RevokeStreamUrl\RevokeStreamUrlTrait;
    use StartStreamSession\StartStreamSessionTrait;
    use TagResource\TagResourceTrait;
    use TerminateStreamSession\TerminateStreamSessionTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateApplication\UpdateApplicationTrait;
    use UpdateStreamGroup\UpdateStreamGroupTrait;
}
