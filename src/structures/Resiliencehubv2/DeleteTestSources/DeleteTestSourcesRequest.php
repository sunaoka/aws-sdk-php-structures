<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\DeleteTestSources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $testId
 * @property string $serviceArn
 * @property list<Shapes\TestSourceInput> $testSources
 */
class DeleteTestSourcesRequest extends Request
{
    /**
     * @param array{
     *     testId: string,
     *     serviceArn: string,
     *     testSources: list<Shapes\TestSourceInput>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
