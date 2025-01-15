<?php

namespace Sunaoka\Aws\Structures\Ses\SendBounce\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FinalRecipient
 * @property 'failed'|'delayed'|'delivered'|'relayed'|'expanded' $Action
 * @property string|null $RemoteMta
 * @property string $Status
 * @property string|null $DiagnosticCode
 * @property \Aws\Api\DateTimeResult|null $LastAttemptDate
 * @property list<ExtensionField>|null $ExtensionFields
 */
class RecipientDsnFields extends Shape
{
    /**
     * @param array{
     *     FinalRecipient?: string|null,
     *     Action: 'failed'|'delayed'|'delivered'|'relayed'|'expanded',
     *     RemoteMta?: string|null,
     *     Status: string,
     *     DiagnosticCode?: string|null,
     *     LastAttemptDate?: \Aws\Api\DateTimeResult|null,
     *     ExtensionFields?: list<ExtensionField>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
