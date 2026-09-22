<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\SearchPrincipals\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $principalId
 * @property 'USER'|'GROUP' $principalType
 * @property string $displayName
 * @property string|null $userName
 * @property string|null $description
 */
class PrincipalSearchResult extends Shape
{
    /**
     * @param array{
     *     principalId: string,
     *     principalType: 'USER'|'GROUP',
     *     displayName: string,
     *     userName?: string|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
