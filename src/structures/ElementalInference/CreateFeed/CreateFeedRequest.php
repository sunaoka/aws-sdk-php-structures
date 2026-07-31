<?php

namespace Sunaoka\Aws\Structures\ElementalInference\CreateFeed;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $accessRoleArn
 * @property list<Shapes\CreateOutput> $outputs
 * @property array<string, string>|null $tags
 */
class CreateFeedRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     accessRoleArn?: string|null,
     *     outputs: list<Shapes\CreateOutput>,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
