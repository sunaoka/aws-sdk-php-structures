<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\ListTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $ConnectorArn
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property TemplateDefinition|null $Definition
 * @property string|null $Name
 * @property string|null $ObjectIdentifier
 * @property int|null $PolicySchema
 * @property TemplateRevision|null $Revision
 * @property 'ACTIVE'|'DELETING'|null $Status
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 */
class TemplateSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     ConnectorArn?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     Definition?: TemplateDefinition|null,
     *     Name?: string|null,
     *     ObjectIdentifier?: string|null,
     *     PolicySchema?: int|null,
     *     Revision?: TemplateRevision|null,
     *     Status?: 'ACTIVE'|'DELETING'|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
