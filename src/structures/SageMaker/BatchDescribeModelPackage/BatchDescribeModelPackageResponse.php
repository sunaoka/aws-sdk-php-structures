<?php

namespace Sunaoka\Aws\Structures\SageMaker\BatchDescribeModelPackage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property array<string, Shapes\BatchDescribeModelPackageSummary>|null $ModelPackageSummaries
 * @property array<string, Shapes\BatchDescribeModelPackageError>|null $BatchDescribeModelPackageErrorMap
 */
class BatchDescribeModelPackageResponse extends Response
{
}
