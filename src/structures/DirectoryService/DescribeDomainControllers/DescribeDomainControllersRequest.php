<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeDomainControllers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property list<string>|null $DomainControllerIds
 * @property string|null $NextToken
 * @property int<0, max>|null $Limit
 */
class DescribeDomainControllersRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     DomainControllerIds?: list<string>|null,
     *     NextToken?: string|null,
     *     Limit?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
