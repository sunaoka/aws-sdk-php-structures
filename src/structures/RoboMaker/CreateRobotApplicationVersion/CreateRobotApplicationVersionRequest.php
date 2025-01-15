<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateRobotApplicationVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $application
 * @property string|null $currentRevisionId
 * @property list<string>|null $s3Etags
 * @property string|null $imageDigest
 */
class CreateRobotApplicationVersionRequest extends Request
{
    /**
     * @param array{
     *     application: string,
     *     currentRevisionId?: string|null,
     *     s3Etags?: list<string>|null,
     *     imageDigest?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
