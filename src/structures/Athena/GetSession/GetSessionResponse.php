<?php

namespace Sunaoka\Aws\Structures\Athena\GetSession;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $SessionId
 * @property string $Description
 * @property string $WorkGroup
 * @property string $EngineVersion
 * @property Shapes\EngineConfiguration $EngineConfiguration
 * @property string $NotebookVersion
 * @property Shapes\SessionConfiguration $SessionConfiguration
 * @property Shapes\SessionStatus $Status
 * @property Shapes\SessionStatistics $Statistics
 */
class GetSessionResponse extends Response
{
}
