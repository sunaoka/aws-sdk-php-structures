<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetCollaborationConfiguredModelAlgorithmAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $allowedAccountIds
 * @property string|null $filterPattern
 * @property 'ALL'|'ERROR_SUMMARY'|null $logType
 * @property LogRedactionConfiguration|null $logRedactionConfiguration
 */
class LogsConfigurationPolicy extends Shape
{
    /**
     * @param array{
     *     allowedAccountIds: list<string>,
     *     filterPattern?: string|null,
     *     logType?: 'ALL'|'ERROR_SUMMARY'|null,
     *     logRedactionConfiguration?: LogRedactionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
