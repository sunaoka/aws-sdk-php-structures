<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeDomainControllers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property list<string> $DomainControllerIds
 * @property string $NextToken
 * @property int $Limit
 */
class DescribeDomainControllersRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     DomainControllerIds?: list<string>,
     *     NextToken?: string,
     *     Limit?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
