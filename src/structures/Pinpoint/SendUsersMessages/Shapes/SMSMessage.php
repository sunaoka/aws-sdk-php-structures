<?php

namespace Sunaoka\Aws\Structures\Pinpoint\SendUsersMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Body
 * @property string|null $Keyword
 * @property string|null $MediaUrl
 * @property 'TRANSACTIONAL'|'PROMOTIONAL'|null $MessageType
 * @property string|null $OriginationNumber
 * @property string|null $SenderId
 * @property array<string, list<string>>|null $Substitutions
 * @property string|null $EntityId
 * @property string|null $TemplateId
 */
class SMSMessage extends Shape
{
    /**
     * @param array{
     *     Body?: string|null,
     *     Keyword?: string|null,
     *     MediaUrl?: string|null,
     *     MessageType?: 'TRANSACTIONAL'|'PROMOTIONAL'|null,
     *     OriginationNumber?: string|null,
     *     SenderId?: string|null,
     *     Substitutions?: array<string, list<string>>|null,
     *     EntityId?: string|null,
     *     TemplateId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
