<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\CreateOptOutList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OptOutListName
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $ClientToken
 */
class CreateOptOutListRequest extends Request
{
    /**
     * @param array{
     *     OptOutListName: string,
     *     Tags?: list<Shapes\Tag>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
