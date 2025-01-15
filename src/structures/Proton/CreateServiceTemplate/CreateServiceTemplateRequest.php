<?php

namespace Sunaoka\Aws\Structures\Proton\CreateServiceTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $description
 * @property string|null $displayName
 * @property string|null $encryptionKey
 * @property string $name
 * @property 'CUSTOMER_MANAGED'|null $pipelineProvisioning
 * @property list<Shapes\Tag>|null $tags
 */
class CreateServiceTemplateRequest extends Request
{
    /**
     * @param array{
     *     description?: string|null,
     *     displayName?: string|null,
     *     encryptionKey?: string|null,
     *     name: string,
     *     pipelineProvisioning?: 'CUSTOMER_MANAGED'|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
