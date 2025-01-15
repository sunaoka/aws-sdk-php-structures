<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeleteCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Body
 * @property 'TRANSACTIONAL'|'PROMOTIONAL'|null $MessageType
 * @property string|null $OriginationNumber
 * @property string|null $SenderId
 * @property string|null $EntityId
 * @property string|null $TemplateId
 */
class CampaignSmsMessage extends Shape
{
    /**
     * @param array{
     *     Body?: string|null,
     *     MessageType?: 'TRANSACTIONAL'|'PROMOTIONAL'|null,
     *     OriginationNumber?: string|null,
     *     SenderId?: string|null,
     *     EntityId?: string|null,
     *     TemplateId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
