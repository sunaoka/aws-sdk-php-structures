<?php

namespace Sunaoka\Aws\Structures\Pinpoint\SendUsersMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Body
 * @property string $Keyword
 * @property string $MediaUrl
 * @property 'TRANSACTIONAL'|'PROMOTIONAL' $MessageType
 * @property string $OriginationNumber
 * @property string $SenderId
 * @property array<string, list<string>> $Substitutions
 * @property string $EntityId
 * @property string $TemplateId
 */
class SMSMessage extends Shape
{
    /**
     * @param array{
     *     Body?: string,
     *     Keyword?: string,
     *     MediaUrl?: string,
     *     MessageType?: 'TRANSACTIONAL'|'PROMOTIONAL',
     *     OriginationNumber?: string,
     *     SenderId?: string,
     *     Substitutions?: array<string, list<string>>,
     *     EntityId?: string,
     *     TemplateId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
