<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\ListApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $Id
 * @property string|null $Name
 * @property string|null $Namespace
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property bool|null $IsService
 * @property 'STANDARD'|'SERVICE'|'MCP_SERVER'|null $ApplicationType
 */
class ApplicationSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Id?: string|null,
     *     Name?: string|null,
     *     Namespace?: string|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     IsService?: bool|null,
     *     ApplicationType?: 'STANDARD'|'SERVICE'|'MCP_SERVER'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
