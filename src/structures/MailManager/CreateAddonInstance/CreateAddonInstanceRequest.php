<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateAddonInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AddonSubscriptionId
 * @property string|null $ClientToken
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateAddonInstanceRequest extends Request
{
    /**
     * @param array{
     *     AddonSubscriptionId: string,
     *     ClientToken?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
