<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\ListTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $ConnectorArn
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property TemplateDefinition $Definition
 * @property string $Name
 * @property string $ObjectIdentifier
 * @property int $PolicySchema
 * @property TemplateRevision $Revision
 * @property 'ACTIVE'|'DELETING' $Status
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 */
class TemplateSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     ConnectorArn?: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     Definition?: TemplateDefinition,
     *     Name?: string,
     *     ObjectIdentifier?: string,
     *     PolicySchema?: int,
     *     Revision?: TemplateRevision,
     *     Status?: 'ACTIVE'|'DELETING',
     *     UpdatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
