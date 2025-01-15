<?php

namespace Sunaoka\Aws\Structures\SSMContacts\CreateContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Alias
 * @property string|null $DisplayName
 * @property 'PERSONAL'|'ESCALATION'|'ONCALL_SCHEDULE' $Type
 * @property Shapes\Plan $Plan
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $IdempotencyToken
 */
class CreateContactRequest extends Request
{
    /**
     * @param array{
     *     Alias: string,
     *     DisplayName?: string|null,
     *     Type: 'PERSONAL'|'ESCALATION'|'ONCALL_SCHEDULE',
     *     Plan: Shapes\Plan,
     *     Tags?: list<Shapes\Tag>|null,
     *     IdempotencyToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
