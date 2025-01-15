<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateAddonSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AddonName
 * @property string|null $ClientToken
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateAddonSubscriptionRequest extends Request
{
    /**
     * @param array{
     *     AddonName: string,
     *     ClientToken?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
