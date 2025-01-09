<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\StartImport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $payload
 * @property 'BOT'|'INTENT'|'SLOT_TYPE' $resourceType
 * @property 'OVERWRITE_LATEST'|'FAIL_ON_CONFLICT' $mergeStrategy
 * @property list<Shapes\Tag> $tags
 */
class StartImportRequest extends Request
{
    /**
     * @param array{
     *     payload: string,
     *     resourceType: 'BOT'|'INTENT'|'SLOT_TYPE',
     *     mergeStrategy: 'OVERWRITE_LATEST'|'FAIL_ON_CONFLICT',
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
