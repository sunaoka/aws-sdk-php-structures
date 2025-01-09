<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\GetSourceRepositoryCloneUrls;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceName
 * @property string $projectName
 * @property string $sourceRepositoryName
 */
class GetSourceRepositoryCloneUrlsRequest extends Request
{
    /**
     * @param array{
     *     spaceName: string,
     *     projectName: string,
     *     sourceRepositoryName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
