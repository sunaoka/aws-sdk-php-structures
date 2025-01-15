<?php

namespace Sunaoka\Aws\Structures\Personalize\CreateDatasetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $roleArn
 * @property string|null $kmsKeyArn
 * @property 'ECOMMERCE'|'VIDEO_ON_DEMAND'|null $domain
 * @property list<Shapes\Tag>|null $tags
 */
class CreateDatasetGroupRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     roleArn?: string|null,
     *     kmsKeyArn?: string|null,
     *     domain?: 'ECOMMERCE'|'VIDEO_ON_DEMAND'|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
