<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateRestoreImageTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $ObjectKey
 * @property string $Name
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property bool $DryRun
 */
class CreateRestoreImageTaskRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     ObjectKey: string,
     *     Name?: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
