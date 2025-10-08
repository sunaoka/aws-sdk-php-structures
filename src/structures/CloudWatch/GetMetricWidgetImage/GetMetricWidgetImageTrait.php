<?php

namespace Sunaoka\Aws\Structures\CloudWatch\GetMetricWidgetImage;

trait GetMetricWidgetImageTrait
{
    /**
     * @param GetMetricWidgetImageRequest $args
     * @return GetMetricWidgetImageResponse
     */
    public function getMetricWidgetImage(GetMetricWidgetImageRequest $args)
    {
        $result = parent::getMetricWidgetImage($args->toArray());
        return new GetMetricWidgetImageResponse($result->toArray());
    }
}
