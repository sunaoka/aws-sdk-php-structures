<?php

namespace Sunaoka\Aws\Structures\Ses\SendBounce\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FinalRecipient
 * @property 'failed'|'delayed'|'delivered'|'relayed'|'expanded' $Action
 * @property string $RemoteMta
 * @property string $Status
 * @property string $DiagnosticCode
 * @property \Aws\Api\DateTimeResult $LastAttemptDate
 * @property list<ExtensionField> $ExtensionFields
 */
class RecipientDsnFields extends Shape
{
    /**
     * @param array{
     *     FinalRecipient?: string,
     *     Action: 'failed'|'delayed'|'delivered'|'relayed'|'expanded',
     *     RemoteMta?: string,
     *     Status: string,
     *     DiagnosticCode?: string,
     *     LastAttemptDate?: \Aws\Api\DateTimeResult,
     *     ExtensionFields?: list<ExtensionField>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
