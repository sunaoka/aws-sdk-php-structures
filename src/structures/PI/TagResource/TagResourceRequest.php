<?php

namespace Sunaoka\Aws\Structures\PI\TagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'RDS'|'DOCDB' $ServiceType
 * @property string $ResourceARN
 * @property list<Shapes\Tag> $Tags
 */
class TagResourceRequest extends Request
{
    /**
     * @param array{
     *     ServiceType: 'RDS'|'DOCDB',
     *     ResourceARN: string,
     *     Tags: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
