<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateRobotApplicationVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $application
 * @property string $currentRevisionId
 * @property list<string> $s3Etags
 * @property string $imageDigest
 */
class CreateRobotApplicationVersionRequest extends Request
{
    /**
     * @param array{
     *     application: string,
     *     currentRevisionId?: string,
     *     s3Etags?: list<string>,
     *     imageDigest?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
