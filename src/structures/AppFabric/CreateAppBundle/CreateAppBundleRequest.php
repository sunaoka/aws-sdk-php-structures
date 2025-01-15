<?php

namespace Sunaoka\Aws\Structures\AppFabric\CreateAppBundle;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string|null $customerManagedKeyIdentifier
 * @property list<Shapes\Tag>|null $tags
 */
class CreateAppBundleRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     customerManagedKeyIdentifier?: string|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
