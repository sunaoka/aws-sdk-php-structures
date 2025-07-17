<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateAddonInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string $AddonSubscriptionId
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateAddonInstanceRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     AddonSubscriptionId: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
