<?php

namespace Sunaoka\Aws\Structures\AppFabric\CreateAppBundle;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $customerManagedKeyIdentifier
 * @property list<Shapes\Tag> $tags
 */
class CreateAppBundleRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     customerManagedKeyIdentifier?: string,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
