<?php

namespace Sunaoka\Aws\Structures\Personalize\CreateDatasetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $roleArn
 * @property string $kmsKeyArn
 * @property 'ECOMMERCE'|'VIDEO_ON_DEMAND' $domain
 * @property list<Shapes\Tag> $tags
 */
class CreateDatasetGroupRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     roleArn?: string,
     *     kmsKeyArn?: string,
     *     domain?: 'ECOMMERCE'|'VIDEO_ON_DEMAND',
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
