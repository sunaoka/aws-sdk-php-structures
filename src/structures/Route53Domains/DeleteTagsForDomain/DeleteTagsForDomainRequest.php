<?php

namespace Sunaoka\Aws\Structures\Route53Domains\DeleteTagsForDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property list<string> $TagsToDelete
 */
class DeleteTagsForDomainRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     TagsToDelete: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
