<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateAddonSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AddonName
 * @property string $ClientToken
 * @property list<Shapes\Tag> $Tags
 */
class CreateAddonSubscriptionRequest extends Request
{
    /**
     * @param array{
     *     AddonName: string,
     *     ClientToken?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
