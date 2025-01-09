<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateAddonInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AddonSubscriptionId
 * @property string $ClientToken
 * @property list<Shapes\Tag> $Tags
 */
class CreateAddonInstanceRequest extends Request
{
    /**
     * @param array{
     *     AddonSubscriptionId: string,
     *     ClientToken?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
