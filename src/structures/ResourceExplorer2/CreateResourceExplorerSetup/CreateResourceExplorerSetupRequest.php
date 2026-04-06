<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\CreateResourceExplorerSetup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $RegionList
 * @property list<string>|null $AggregatorRegions
 * @property string $ViewName
 */
class CreateResourceExplorerSetupRequest extends Request
{
    /**
     * @param array{
     *     RegionList: list<string>,
     *     AggregatorRegions?: list<string>|null,
     *     ViewName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
