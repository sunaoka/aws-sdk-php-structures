<?php

namespace Sunaoka\Aws\Structures\SSMContacts\CreateContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Alias
 * @property string $DisplayName
 * @property 'PERSONAL'|'ESCALATION'|'ONCALL_SCHEDULE' $Type
 * @property Shapes\Plan $Plan
 * @property list<Shapes\Tag> $Tags
 * @property string $IdempotencyToken
 */
class CreateContactRequest extends Request
{
    /**
     * @param array{
     *     Alias: string,
     *     DisplayName?: string,
     *     Type: 'PERSONAL'|'ESCALATION'|'ONCALL_SCHEDULE',
     *     Plan: Shapes\Plan,
     *     Tags?: list<Shapes\Tag>,
     *     IdempotencyToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
