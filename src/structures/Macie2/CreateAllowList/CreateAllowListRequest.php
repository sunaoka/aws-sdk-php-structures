<?php

namespace Sunaoka\Aws\Structures\Macie2\CreateAllowList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property Shapes\AllowListCriteria $criteria
 * @property string $description
 * @property string $name
 * @property array<string, string> $tags
 */
class CreateAllowListRequest extends Request
{
    /**
     * @param array{
     *     clientToken: string,
     *     criteria: Shapes\AllowListCriteria,
     *     description?: string,
     *     name: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
