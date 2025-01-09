<?php

namespace Sunaoka\Aws\Structures\SageMaker\BatchDescribeModelPackage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property array<string, Shapes\BatchDescribeModelPackageSummary> $ModelPackageSummaries
 * @property array<string, Shapes\BatchDescribeModelPackageError> $BatchDescribeModelPackageErrorMap
 */
class BatchDescribeModelPackageResponse extends Response
{
}
