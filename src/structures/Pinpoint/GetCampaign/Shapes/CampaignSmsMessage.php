<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Body
 * @property 'TRANSACTIONAL'|'PROMOTIONAL' $MessageType
 * @property string $OriginationNumber
 * @property string $SenderId
 * @property string $EntityId
 * @property string $TemplateId
 */
class CampaignSmsMessage extends Shape
{
    /**
     * @param array{
     *     Body?: string,
     *     MessageType?: 'TRANSACTIONAL'|'PROMOTIONAL',
     *     OriginationNumber?: string,
     *     SenderId?: string,
     *     EntityId?: string,
     *     TemplateId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
