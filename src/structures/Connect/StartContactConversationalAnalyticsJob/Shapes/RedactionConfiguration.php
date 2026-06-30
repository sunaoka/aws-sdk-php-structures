<?php

namespace Sunaoka\Aws\Structures\Connect\StartContactConversationalAnalyticsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Enable'|'Disable' $Behavior
 * @property 'None'|'RedactedOnly'|'RedactedAndOriginal' $Policy
 * @property list<string>|null $Entities
 * @property 'PII'|'EntityType'|null $MaskMode
 */
class RedactionConfiguration extends Shape
{
    /**
     * @param array{
     *     Behavior: 'Enable'|'Disable',
     *     Policy: 'None'|'RedactedOnly'|'RedactedAndOriginal',
     *     Entities?: list<string>|null,
     *     MaskMode?: 'PII'|'EntityType'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
