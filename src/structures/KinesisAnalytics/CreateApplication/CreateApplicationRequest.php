<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\CreateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property string $ApplicationDescription
 * @property list<Shapes\Input> $Inputs
 * @property list<Shapes\Output> $Outputs
 * @property list<Shapes\CloudWatchLoggingOption> $CloudWatchLoggingOptions
 * @property string $ApplicationCode
 * @property list<Shapes\Tag> $Tags
 */
class CreateApplicationRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     ApplicationDescription?: string,
     *     Inputs?: list<Shapes\Input>,
     *     Outputs?: list<Shapes\Output>,
     *     CloudWatchLoggingOptions?: list<Shapes\CloudWatchLoggingOption>,
     *     ApplicationCode?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
