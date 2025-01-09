<?php

namespace Sunaoka\Aws\Structures\Proton\CreateServiceTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $description
 * @property string $displayName
 * @property string $encryptionKey
 * @property string $name
 * @property 'CUSTOMER_MANAGED' $pipelineProvisioning
 * @property list<Shapes\Tag> $tags
 */
class CreateServiceTemplateRequest extends Request
{
    /**
     * @param array{
     *     description?: string,
     *     displayName?: string,
     *     encryptionKey?: string,
     *     name: string,
     *     pipelineProvisioning?: 'CUSTOMER_MANAGED',
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
