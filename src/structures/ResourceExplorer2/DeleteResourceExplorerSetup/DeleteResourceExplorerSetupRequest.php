<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\DeleteResourceExplorerSetup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $RegionList
 * @property bool|null $DeleteInAllRegions
 */
class DeleteResourceExplorerSetupRequest extends Request
{
    /**
     * @param array{
     *     RegionList?: list<string>|null,
     *     DeleteInAllRegions?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
