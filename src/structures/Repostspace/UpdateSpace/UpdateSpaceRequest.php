<?php

namespace Sunaoka\Aws\Structures\Repostspace\UpdateSpace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $description
 * @property string|null $roleArn
 * @property string $spaceId
 * @property 'BASIC'|'STANDARD'|null $tier
 */
class UpdateSpaceRequest extends Request
{
    /**
     * @param array{
     *     description?: string|null,
     *     roleArn?: string|null,
     *     spaceId: string,
     *     tier?: 'BASIC'|'STANDARD'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
