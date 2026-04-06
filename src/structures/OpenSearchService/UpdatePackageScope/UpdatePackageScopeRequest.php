<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdatePackageScope;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PackageID
 * @property 'ADD'|'OVERRIDE'|'REMOVE' $Operation
 * @property list<string> $PackageUserList
 */
class UpdatePackageScopeRequest extends Request
{
    /**
     * @param array{
     *     PackageID: string,
     *     Operation: 'ADD'|'OVERRIDE'|'REMOVE',
     *     PackageUserList: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
