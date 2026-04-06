<?php

namespace Sunaoka\Aws\Structures\PartnerCentralBenefits\TagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceArn
 * @property list<Shapes\Tag> $tags
 */
class TagResourceRequest extends Request
{
    /**
     * @param array{
     *     resourceArn: string,
     *     tags: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
