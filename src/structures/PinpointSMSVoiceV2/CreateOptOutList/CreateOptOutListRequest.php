<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\CreateOptOutList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OptOutListName
 * @property list<Shapes\Tag> $Tags
 * @property string $ClientToken
 */
class CreateOptOutListRequest extends Request
{
    /**
     * @param array{
     *     OptOutListName: string,
     *     Tags?: list<Shapes\Tag>,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
