<?php

namespace Sunaoka\Aws\Structures\Keyspaces\CreateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'ENABLING'|'DISABLED'|'DISABLING' $status
 * @property 'NEW_IMAGE'|'OLD_IMAGE'|'KEYS_ONLY'|'NEW_AND_OLD_IMAGES'|null $viewType
 * @property list<Tag>|null $tags
 * @property 'TABLE'|'NONE'|null $propagateTags
 */
class CdcSpecification extends Shape
{
    /**
     * @param array{
     *     status: 'ENABLED'|'ENABLING'|'DISABLED'|'DISABLING',
     *     viewType?: 'NEW_IMAGE'|'OLD_IMAGE'|'KEYS_ONLY'|'NEW_AND_OLD_IMAGES'|null,
     *     tags?: list<Tag>|null,
     *     propagateTags?: 'TABLE'|'NONE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
