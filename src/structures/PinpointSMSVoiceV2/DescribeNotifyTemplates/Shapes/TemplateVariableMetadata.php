<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeNotifyTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STRING'|'INTEGER'|'BOOLEAN' $Type
 * @property bool $Required
 * @property string|null $Description
 * @property int|null $MaxLength
 * @property int|null $MinValue
 * @property int|null $MaxValue
 * @property string|null $DefaultValue
 * @property string|null $Pattern
 * @property string|null $Sample
 * @property 'CUSTOMER'|'SYSTEM'|null $Source
 */
class TemplateVariableMetadata extends Shape
{
    /**
     * @param array{
     *     Type: 'STRING'|'INTEGER'|'BOOLEAN',
     *     Required: bool,
     *     Description?: string|null,
     *     MaxLength?: int|null,
     *     MinValue?: int|null,
     *     MaxValue?: int|null,
     *     DefaultValue?: string|null,
     *     Pattern?: string|null,
     *     Sample?: string|null,
     *     Source?: 'CUSTOMER'|'SYSTEM'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
