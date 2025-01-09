<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetEffectivePermissionsForPath;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property string $ResourceArn
 * @property string $NextToken
 * @property int $MaxResults
 */
class GetEffectivePermissionsForPathRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     ResourceArn: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
