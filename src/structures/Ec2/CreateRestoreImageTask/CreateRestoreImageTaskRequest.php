<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateRestoreImageTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $ObjectKey
 * @property string|null $Name
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property bool|null $DryRun
 */
class CreateRestoreImageTaskRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     ObjectKey: string,
     *     Name?: string|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
