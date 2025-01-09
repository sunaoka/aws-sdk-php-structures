<?php

namespace Sunaoka\Aws\Structures\Proton\CreateEnvironmentTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $description
 * @property string $displayName
 * @property string $encryptionKey
 * @property string $name
 * @property 'CUSTOMER_MANAGED' $provisioning
 * @property list<Shapes\Tag> $tags
 */
class CreateEnvironmentTemplateRequest extends Request
{
    /**
     * @param array{
     *     description?: string,
     *     displayName?: string,
     *     encryptionKey?: string,
     *     name: string,
     *     provisioning?: 'CUSTOMER_MANAGED',
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
