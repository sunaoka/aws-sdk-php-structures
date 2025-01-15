<?php

namespace Sunaoka\Aws\Structures\Athena\GetSession;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $SessionId
 * @property string|null $Description
 * @property string|null $WorkGroup
 * @property string|null $EngineVersion
 * @property Shapes\EngineConfiguration|null $EngineConfiguration
 * @property string|null $NotebookVersion
 * @property Shapes\SessionConfiguration|null $SessionConfiguration
 * @property Shapes\SessionStatus|null $Status
 * @property Shapes\SessionStatistics|null $Statistics
 */
class GetSessionResponse extends Response
{
}
