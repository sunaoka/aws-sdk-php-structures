<?php

namespace Sunaoka\Aws\Structures\Personalize\CreateSchema;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $schema
 * @property 'ECOMMERCE'|'VIDEO_ON_DEMAND'|null $domain
 */
class CreateSchemaRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     schema: string,
     *     domain?: 'ECOMMERCE'|'VIDEO_ON_DEMAND'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
