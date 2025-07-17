<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateAddonSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string $AddonName
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateAddonSubscriptionRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     AddonName: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
