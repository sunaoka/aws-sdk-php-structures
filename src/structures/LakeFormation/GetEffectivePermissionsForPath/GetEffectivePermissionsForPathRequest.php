<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetEffectivePermissionsForPath;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CatalogId
 * @property string $ResourceArn
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 */
class GetEffectivePermissionsForPathRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     ResourceArn: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
